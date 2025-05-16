#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define MAX 100

typedef struct {
    char tipo[20];
    float nota;
    float peso_percentual;
} Avaliacao;

typedef struct {
    Avaliacao avaliacoes[MAX];
    int quantidade;
} SistemaNotas;

void inicializarSistema(SistemaNotas *sistema) {
    sistema->quantidade = 0;
}
int adicionarAvaliacao(SistemaNotas *sistema, const char *tipo, float nota, float peso_percentual) {
    if (sistema->quantidade >= MAX) {
        return 0;
    }

    Avaliacao *nova = &sistema->avaliacoes[sistema->quantidade];
    strncpy(nova->tipo, tipo, sizeof(nova->tipo) - 1);
    nova->tipo[sizeof(nova->tipo) - 1] = '\0';
    nova->nota = nota;
    nova->peso_percentual = peso_percentual;

    sistema->quantidade++;
    return 1;
}
float calcularMediaFinal(SistemaNotas *sistema) {
    float soma = 0.0;
    float totalPesos = 0.0;

    for (int i = 0; i < sistema->quantidade; i++) {
        float peso = sistema->avaliacoes[i].peso_percentual / 100.0;
        soma += sistema->avaliacoes[i].nota * peso;
        totalPesos += peso;
    }

    if (totalPesos == 0.0) {
        return -1.0;
    }

    return soma;
}
