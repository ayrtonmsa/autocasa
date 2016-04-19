#include <SPI.h>
#include <Ethernet.h>

//Configurações do Ethernet Shield
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
byte ip[] = { 192, 168, 25, 15 }; // ip que o arduino assumirá
byte gateway[] = { 192, 168, 25, 1 }; // ip do roteador
byte subnet[] = { 255, 255, 255, 0 }; // mascara da red
EthernetServer server(8081); // Cria o servidor na porta 8081

EthernetClient clientaux; // cria um cliente auxiliar para enviar informações http para o servidor

// String que representa o estado dos dispositivos
char Luz[5] = "00L#";
char Tomada[5] = "00T#";

// String onde é guardada as msgs recebidas
char msg[5] = "00M#";

// String que vai enviar os dados para a página
String data;

void setup() {
  Ethernet.begin(mac, ip, gateway, subnet);
  server.begin();
  pinMode(A0, OUTPUT);
  pinMode(A1, OUTPUT);
  pinMode(A2, OUTPUT);
  Serial.begin(9600);
}

void loop() {
  data = String();
  data = "";

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
              //data = "&code=" + msg[1];
              //data += "&status=" + msg[2];
              //data += "&type=" + msg[3];
              data = "/code/" + msg[1];
              data += "/status/" + msg[2];
              data += "/type/" + msg[3];
            break;
            case '2':
              if (Luz[msg[1]] == '1') digitalWrite(A1, HIGH); else digitalWrite(A1, LOW);
              //data = "&code=" + msg[1];
              //data += "&status=" + msg[2];
              //data += "&type=" + msg[3];
              data = "/code/" + msg[1];
              data += "/status/" + msg[2];
              data += "/type/" + msg[3];
            break;
          }
          break;
        case 'T':
          // Adicionar comentário.
          Tomada[msg[1]] = msg[2];
          switch (msg[1]) {
            case '1':
              if (Tomada[msg[1]] == '1') digitalWrite(A2, HIGH); else digitalWrite(A3, LOW);
              //data = "&code=" + msg[1];
              //data += "&status=" + msg[2];
              //data += "&type=" + msg[3];
              data = "/code/" + msg[1];
              data += "/status/" + msg[2];
              data += "/type/" + msg[3];
            break;
          }
        break;
      }
    }
    //envia um post para atualizar o banco de dados.
    if(data != ""){
      Serial.println("Connecting to Client...");
      if(clientaux.connect("192.168.25.5:8080", 8080)){
        Serial.println("Client Connected...");
     // Make a HTTP request:
       clientaux.print("GET http://192.168.25.5:8080/autocasa/public/house/receiveOfArduino/code/1/status/1/type/L");
       clientaux.println(" HTTP/1.1");
       clientaux.println("Host: 192.168.25.5:8080");
       clientaux.println();
      }else{
        Serial.println("connection failed...");
      }
      if(clientaux.connected()){
        clientaux.stop();
      }
    }
  }
}
