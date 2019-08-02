#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <netinet/in.h>
#include <string.h>
#include <sys/socket.h>
#include <sys/types.h>
#include <arpa/inet.h>


int main(int argc, char *argv[]){

    int server_socket, conn;


    struct sockaddr_in serv;
    serv.sin_family = AF_INET;
    serv.sin_port = htons(8096);
    serv.sin_addr.s_addr = INADDR_ANY;

    server_socket = socket(AF_INET, SOCK_STREAM, 0);

    bind(server_socket, (struct sockaddr *)&serv, sizeof(serv));

    listen(server_socket, 5);

while(conn = accept(server_socket, (struct sockaddr *)NULL,NULL)){

            char district[256];
            recv(conn, district, 100, 0);
            printf(">>District : %s", district);

            char addmember[256] = "Addmember";
            char district1[256] = "Kampala";
            char district2[256] = "Wakiso";
            char district3[256] ="Luweero";
            char district4[256] ="Masaka";
            char district5[256] ="Gulu";
            char district6[256] ="Soroti";
            char district7[256] ="Mpiigi";

            char command[256];


            char search[256] = "Search";
            char payment_status[256] ="get_statement";
            char stop[50] = "done";
            char filecheck[256]="Check_status";
           while(1){
            recv(conn, command, 1000, 0);
            printf("%s", command);

        if((strstr(district,district1)) != NULL){
        if((strstr(command, addmember)) != NULL){

        FILE *fp;
        char member_details[256];
        strncpy(member_details, (command+10), 200);

        fp = fopen("kampala.txt", "a");
        fprintf(fp, "%s", member_details);
        fclose(fp);
        printf("Successfully added : %s to kampala.txt", member_details);

        }
        printf("\n");
        }

else    if((strstr(district,district2)) != NULL){
        if((strstr(command, addmember)) != NULL){

        char member_details[256];
        strncpy(member_details, (command+10), 200);
        FILE *fp;
        fp = fopen("wakiso.txt", "a");
        fprintf(fp, "%s", member_details);
        fclose(fp);
        printf("Successfully added : %s to wakiso.txt", member_details);
        }
        printf("\n");
        }

else    if((strstr(district,district3)) != NULL){
        if((strstr(command, addmember)) != NULL){

        char member_details[256];
        strncpy(member_details, (command+10), 200);
        FILE *fp;
        fp = fopen("luweero.txt", "a");
        fprintf(fp, "%s", member_details);
        fclose(fp);
        printf("Successfully added : %s to luweero.txt", member_details);
        }
        printf("\n");
        }

else    if((strstr(district,district4)) != NULL){
        if((strstr(command, addmember)) != NULL){

        char member_details[256];
        strncpy(member_details, (command+10), 200);
        FILE *fp;
        fp = fopen("masaka.txt", "a");
        fprintf(fp, "%s", member_details);
        fclose(fp);
        printf("Successfully added : %s to masaka.txt", member_details);
        }
        printf("\n");
        }

else    if((strstr(district,district5)) != NULL){
        if((strstr(command, addmember)) != NULL){

        char member_details[256];
        strncpy(member_details, (command+10), 200);
        FILE *fp;
        fp = fopen("gulu.txt", "a");
        fprintf(fp, "%s", member_details);
        fclose(fp);
        printf("Successfully added : %s to gulu.txt", member_details);
        }
        printf("\n");
        }

else    if((strstr(district,district6)) != NULL){
        if((strstr(command, addmember)) != NULL){

        char member_details[256];
        strncpy(member_details, (command+10), 200);
        FILE *fp;
        fp = fopen("soroti.txt", "a");
        fprintf(fp, "%s", member_details);
        fclose(fp);
        printf("Successfully added : %s to soroti.txt", member_details);
        }
        printf("\n");
        }

else    if((strstr(district,district7)) != NULL){
        if((strstr(command, addmember)) != NULL){

        char member_details[256];
        strncpy(member_details, (command+10), 200);
        FILE *fp;
        fp = fopen("mpiigi.txt", "a");
        fprintf(fp, "%s", member_details);
        fclose(fp);
        printf("Successfully added : %s to mpiigi.txt", member_details);
        }
        printf("\n");
        }

if(strstr(command,stop) != NULL){
        char sig[50];
        recv(conn, sig, 4, 0);

        printf("Agent Signature : %s", sig);
        if(strstr(district,district1) !=NULL){
        FILE *fl;
        fl=fopen("kampala.txt","a");
        fprintf(fl, "%s", sig);
        fclose(fl);
        }

        if(strstr(district,district2) !=NULL){
        FILE *fw;
        fw=fopen("wakiso.txt","a");
        fprintf(fw, "%s", sig);
        fclose(fw);
        }

        if(strstr(district,district3) !=NULL){
        FILE *fo;
        fo=fopen("luweero.txt","a");
        fprintf(fo, "%s", sig);
        fclose(fo);
        }

        if(strstr(district,district4) !=NULL){
        FILE *fm;
        fm=fopen("masaka.txt","a");
        fprintf(fm, "%s", sig);
        fclose(fm);
        }

        if(strstr(district,district5) !=NULL){
        FILE *fg;
        fg=fopen("gulu.txt","a");
        fprintf(fg, "%s", sig);
        fclose(fg);
        }

        if(strstr(district,district6) !=NULL){
        FILE *fs;
        fs=fopen("soroti.txt","a");
        fprintf(fs, "%s", sig);
        fclose(fs);
        }

        if(strstr(district,district7) !=NULL){
        FILE *fi;
        fi=fopen("mpiigi.txt","a");
        fprintf(fi, "%s", sig);
        fclose(fi);
        }
        }
if(strstr(command, filecheck) != NULL){
    char file_status[256];
    if(strstr(district, district1) != NULL){
    FILE *fp;
    fp=fopen("filecheck_kampala.txt","r");
    if(fgets(file_status, 256, fp)==NULL){
    char message[256] ="Member details stored successfully";
    send(conn, message, 256, 0);
    }
    while(!feof(fp)){
    fgets(file_status,256,fp);
    send(conn,file_status,256,0);
    }
    fclose(fp);
    }
   if(strstr(district, district2) != NULL){
    FILE *fp;
    fp=fopen("filecheck_wakiso.txt","r");
     if(fgets(file_status, 256, fp) ==NULL){
    char message[256] ="Member details stored successfully";
    send(conn, message, 256, 0);
    }
    while(!feof(fp)){
    fgets(file_status,256,fp);
    send(conn,file_status,256,0);
    }
    fclose(fp);
    }
    if(strstr(district, district3) != NULL){
    FILE *fp;
    fp=fopen("filecheck_luweero.txt","r");
     if(fgets(file_status,256,fp) ==NULL){
    char message[256] ="Member details stored successfully";
    send(conn, message, 256, 0);
    }
    while(!feof(fp)){
    fgets(file_status,256,fp);
    send(conn,file_status,256,0);
    }
    fclose(fp);
    }
    if(strstr(district, district4) != NULL){
    FILE *fp;
    fp=fopen("filecheck_masaka.txt","r");
     if(fgets(file_status, 256, fp )==NULL){
    char message[256] ="Member details stored successfully";
    send(conn, message, 256, 0);
    }
    while(!feof(fp)){
    fgets(file_status,256,fp);
    send(conn,file_status,256,0);
    }
    fclose(fp);
    }
    if(strstr(district, district5) != NULL){
    FILE *fp;
    fp=fopen("filecheck_gulu.txt","r");
     if(fgets(file_status,256,fp )==NULL){
    char message[256] ="Member details stored successfully";
    send(conn, message, 256, 0);
    }
    while(!feof(fp)){
    fgets(file_status,256,fp);
    send(conn,file_status,256,0);
    }
    fclose(fp);
    }
    if(strstr(district, district6) != NULL){
    FILE *fp;
    fp=fopen("filecheck_soroti.txt","r");
     if(fgets(file_status,256,fp )==NULL){
    char message[256] ="Member details stored successfully";
    send(conn, message, 256, 0);
    }
    while(!feof(fp)){
    fgets(file_status,256,fp);
    send(conn,file_status,256,0);
    }
    fclose(fp);
    }
    if(strstr(district, district7) != NULL){
    FILE *fp;
    fp=fopen("filecheck_mpigi.txt","r");
     if(fgets(file_status,256, fp) ==NULL){
    char message[256] ="Member details stored successfully";
    send(conn, message, 256, 0);
    }
    while(!feof(fp)){
    fgets(file_status,256,fp);
    send(conn,file_status,256,0);
    }
    fclose(fp);
    }
}
if(strstr(command, payment_status) != NULL){
    char pay_details[256];
    FILE *fe;
    fe = fopen("payments.txt","r");

    while(!feof(fe)){
    fgets(pay_details, 1000, fe);

    send(conn, pay_details, 1000, 0);
    }
    fclose(fe);
    }

}
}
}







