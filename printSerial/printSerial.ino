/*
  DigitalReadSerial
 Reads a digital input on pin 2, prints the result to the serial monitor

 This example code is in the public domain.
 */

// digital pin 2 has a pushbutton attached to it. Give it a name:
int temp = 79;
int luzi = 55; 
int hall = 40; 
String valorTemperatura = "temperatura";

// the setup routine runs once when you press reset:
void setup() {
  // initialize serial communication at 9600 bits per second:
  Serial.begin(9600);

}

// the loop routine runs over and over again forever:
void loop() {
  Serial.print("temperatura ");
  Serial.print(temp);  
  Serial.print(" luz ");
  Serial.println(luzi);  
 
  delay(2000); 
}


