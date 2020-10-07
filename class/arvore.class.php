<?php

class Arvore {

    public function inserir($node, $valor) {

        $i = 0;
        if ($i = 0) {

            echo "Inserindo Raiz" . $valor . "<br>";
            $node->raiz = new No($valor);
            $i++;

        // Verifica se a árvore já foi criada
        } elseif ($node != NULL) {

            // Verifica se o valor a ser inserido é menor que o do nodo corrente da árvore, se sim vai para a subarvore esquerda
            if ($valor < $node->valor) {

                // Se tiver elemento no modo esquerdo continua a busca
                if ($node->esquerda != NULL) {

                    $this->inserir($node->esquerda, $valor);

                } else {

                    // se nodo esquerdo vazio insere o novo modo aqui e adiciona 200
                    echo "Inserindo " . $valor . " a esquerda de " . $node->valor . "<br>";
                    $node->esquerda = new No($valor);
                    $GLOBALS["valorEsquerda"] += 1;

                }    
            // Verifica se o valor a ser inserido é maior que o nodo corrente da árvore, se sim vai para subarvore direta
            } elseif ($valor > $node->valor) {

                // Se tiver elemento no modo direto continua a busca
                if ($node->direita != NULL) {

                    $this->inserir($node->direita, $valor);

                } else {

                    // Se nodo direito vazio insere o novo modo aqui e adiciona 100 
                    echo "Inserindo " . $valor . " a direita de " . $node->valor . "<br>";
                    $node->direita = new No($valor);
                    $GLOBALS["valorDireita"] += 1;
                    
                }
            }
        }
    }
}