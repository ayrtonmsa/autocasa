#include <SPI.h>
#include <Ethernet.h>
#include <Servo.h>


Servo motor; 

//Configurações do Ethernet Shield
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
byte ip[] = { 192, 168, 25, 15 }; // ip que o arduino assumirá
byte gateway[] = { 192, 168, 25, 1 }; // ip do roteador
byte subnet[] = { 255, 255, 255, 0 };

// String que representa o estado dos dispositivos
char Luz[7] = "0000L#";

EthernetServer server(8081); // Cria o servidor na porta 8081

// String onde é guardada as msgs recebidas
char msg[7] = "0000L#";

void setup() {
  Ethernet.begin(mac, ip, gateway, subnet);
  server.begin();
  pinMode(A0, OUTPUT);
  pinMode(A1, OUTPUT);
  pinMode(A2, OUTPUT);
  pinMode(A3, OUTPUT);
  pinMode(A4, OUTPUT);
  motor.attach(A5);
}

void loop() {
  EthernetClient client = server.available();
  // SE receber um caracter...
  if (client) {
    // guarda o caracter na string 'msg'
    msg[1] = msg[2]; msg[2] = msg[3]; msg[3] = msg[4]; msg[4] = msg[5]; msg[5] = msg[6];
    msg[6] = client.read();

    if (msg[6] == '#') {
      switch (msg[5]) {
        case 'R':
          // Se receber o comando 'R#' envia de volta o status dos
          //   dispositivos. (Que é a string 'Luz')
          client.write(Luz);
          break;
        case 'P':
          //Ligando o buzzer com uma frequencia de 1500 hz.
          tone(A4,4000);   
          delay(500);
           
          //Desligando o buzzer.
          noTone(A4);
          delay(500); 
          break;
        case 'G':
          motor.write(45); 
          delay(1000); 
          motor.write(125);
          delay(1000); 
          break;
        case 'L':
          // Caso L#, ele copia os 4 bytes anteriores p/ a
          //   string 'Luz' e cada byte representa um
          // dispositivo, onde '1'=ON e '0'=OFF
          Luz[0] = msg[1];
          Luz[1] = msg[2];
          Luz[2] = msg[3];
          Luz[3] = msg[4];
          if (Luz[0] == '1') digitalWrite(A0, HIGH); else digitalWrite(A0, LOW);
          if (Luz[1] == '1') digitalWrite(A1, HIGH); else digitalWrite(A1, LOW);
          if (Luz[2] == '1') digitalWrite(A2, HIGH); else digitalWrite(A2, LOW);
          if (Luz[3] == '1') digitalWrite(A3, HIGH); else digitalWrite(A3, LOW);
          break;

      }
    }
  }
}
