#include <SPI.h>
#include <Ethernet.h>
//Configurações do Ethernet Shield
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
byte ip[] = { 192, 168, 25, 31 }; // ip que o arduino assumirá
byte gateway[] = { 192, 168, 25, 1 }; // ip do roteador
byte subnet[] = { 255, 255, 255, 0 }; // mascara da red
EthernetServer server(80); // Cria o servidor na porta 8081
//EthernetClient clientaux; // cria um cliente auxiliar para enviar informações http para o servidor
// String que representa o estado dos dispositivos
char Luz[5] = "00L#";
char Tomada[5] = "00T#";
char Status[6] = "00L0T";
// String onde é guardada as msgs recebidas
char msg[5] = "00M#";
// variaveis dos botoes
int botao1 = 6;
int botao2 = 7;
int bot1e = 0;
int bot2e = 0;
// variaveis dos leds da tomada
int tl = 30;
int td = 31;
void setup() {
  Ethernet.begin(mac, ip, gateway, subnet);
  server.begin();
  pinMode(A0, OUTPUT);
  pinMode(A1, OUTPUT);
  pinMode(A2, OUTPUT);
  pinMode(tl, OUTPUT);
  pinMode(td, OUTPUT);
  pinMode(botao1, INPUT);
  pinMode(botao2, INPUT);
  Serial.begin(9600);
  digitalWrite(td, HIGH);
}
void loop() {
  bot1e = digitalRead(botao1);
  if (bot1e == HIGH) {
    if (Status[0] == '1') {
      Status[0] = '0';
    } else {
      Status[0] = '1';
    }
    delay(150);
  }
  if (Status[0] == '1') {
    digitalWrite(A0, HIGH);
  } else {
    digitalWrite(A0, LOW);
  }
  bot2e = digitalRead(botao2);
  if (bot2e == HIGH) {
    if (Status[1] == '1') {
      Status[1] = '0';
    } else {
      Status[1] = '1';
    }
    delay(150);
  }
  if (Status[1] == '1') {
    digitalWrite(A1, HIGH);
  } else {
    digitalWrite(A1, LOW);
  }
  EthernetClient client = server.available();
  // SE receber um caracter...
  if (client) {
    // guarda o caracter na string 'msg'
    msg[1] = msg[2]; msg[2] = msg[3]; msg[3] = msg[4];
    msg[4] = client.read();
    if (msg[4] == '#') {
      switch (msg[3]) {
        case 'L':
          // Adicionar comentário.
          Luz[msg[1]] = msg[2];
          switch (msg[1]) {
            case '1':
              if (Luz[msg[1]] == '1') digitalWrite(A0, HIGH); else digitalWrite(A0, LOW);
              Status[0] = msg[2];
              break;
            case '2':
              if (Luz[msg[1]] == '1') digitalWrite(A1, HIGH); else digitalWrite(A1, LOW);
              Status[1] = msg[2];
              break;
          }
          break;
        case 'T':
          // Adicionar comentário.
          Tomada[msg[1]] = msg[2];
          switch (msg[1]) {
            case '1':
              if (Tomada[msg[1]] == '1') {digitalWrite(A2, HIGH);digitalWrite(tl, HIGH);digitalWrite(td, LOW);} else {digitalWrite(A2, LOW);digitalWrite(tl, LOW);digitalWrite(td, HIGH);}
              Status[3] = msg[2];
              break;
          }
          break;
        case 'R':
          client.write(Status);
          break;
      }
    }
  }
}
