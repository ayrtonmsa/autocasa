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
void setup() {
  Ethernet.begin(mac, ip, gateway, subnet);
  server.begin();
  pinMode(A0, OUTPUT);
  pinMode(A1, OUTPUT);
  pinMode(A2, OUTPUT);
  Serial.begin(9600);
}
void loop() {
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
              if (Tomada[msg[1]] == '1') digitalWrite(A2, HIGH); else digitalWrite(A3, LOW);
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
  //Serial.println("Connecting 192.168.25.8");
  //if (clientaux.connect("192.168.25.8", 80)) {
  //Serial.println("connect");
  //clientaux.print("GET http://192.168.25.8/autocasa/public/house/receiveOfArduino/code/1/status/1/type/L");
  //clientaux.println(" HTTP/1.1");
  //clientaux.println("Host: 192.168.25.8");
  //clientaux.println();
  //}
  //if (clientaux.connected()) {
  //clientaux.stop();
  //}
}
