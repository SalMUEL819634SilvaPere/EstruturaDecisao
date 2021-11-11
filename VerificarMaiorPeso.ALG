algoritmo "semnome"
var

i:inteiro
n, pesado: Caracter
p, mai: Real

inicio
 LimpaTela
 escreval("DETECTOR DE PESAD")
 escreval("maior peso ate agora: ",mai, "kg")
 para i<- 1 ate 5 faca
         escreval ("digite o nome: ")
         leia(n)
         escreval ("digite o peso de ",n, ": ")
         leia (p)
         se (p>mai) entao
           mai<-p
           pesado <- n
         fimse
         limpatela
         escreval("DETECTOR DE PESAD")
         escreval("maior peso ate agora: ",mai, "kg")
 fimpara
 limpatela
         escreval("DETECTOR DE PESAD")
         escreval("maior peso ate agora: ",mai, "kg")
         escreval("a pessoa mais gorda foi ", pesado, ", com ", mai, " quilos.")




fimalgoritmo