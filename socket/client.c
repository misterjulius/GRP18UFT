#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <netinet/in.h>
#include <string.h>
#include <sys/socket.h>
#include <sys/types.h>
#include <arpa/inet.h>
#include <netdb.h>
#include "index.c"

int main(int argc, char *argv[]){
    int client_socket;

    struct sockaddr_in serv;
    serv.sin_family = AF_INET;
    serv.sin_addr.s_addr = INADDR_ANY;
    serv.sin_port = htons(8096);

    client_socket = socket(AF_INET, SOCK_STREAM, 0);

    inet_pton(AF_INET, "127.0.0.1", &serv.sin_addr);

    connect(client_socket, (struct sockaddr *)&serv, sizeof(serv));
    printf(" --[+]- UNITED FRONT FOR TRANSFORMATION -[+]-- \n\n");

    char stop[50] = "done";

    char file_check[256] = "Check_status";
    char search[256] = "Search";
    char payment_status[256] = "get_statement";

    char district[256];
    printf("[+] Enter district : \n");
    fgets(district, 100, stdin);
    send(client_socket, district, 600 , 0);

    printf("[+] Enter \'done\' to exit\n");

    char command[256];

while(1){
        fgets(command, 256, stdin);

        send(client_socket, command, sizeof(command), 0);

if(strstr(command,stop) != NULL){
    char* sig = signature();

    printf("Your signature is %s\n", sig);
    send(client_socket, sig, 100, 0);
    printf("Member details successfully sent!\n");
}

if(strstr(command,payment_status) != NULL){

char payment_details[256];
        while(1){
        recv(client_socket, payment_details, 1000, 0);
        printf("%s", payment_details);
        }
char end[256]="done";
char quit[256];

fgets(quit, 256, stdin);
        if(strstr(quit, end) !=NULL){
        return 1;
        }
}
if(strstr(command,file_check)!=NULL){
    char file_status[256];

    recv(client_socket, file_status, 1000, 0);
    printf("%s", file_status);
}

}
}


