<?php

class Arvore {

    public function inserir($node, $valor) {

        // Verifica se a árvore já foi criada
        if ($node != NULL) {

            // Verifica se o valor a ser inserido é menor que o do nodo corrente da árvore, se sim vai para a subarvore esquerda
            if ($valor < $node->valor) {

                // Se tiver elemento no modo esquerdo continua a busca
                if ($node->esquerda != NULL) {

                    $this->inserir($node->esquerda, $valor);

                } else {

                    // se nodo esquerdo vazio insere o novo modo aqui e adiciona 200
                    echo "Inserindo " . $valor . " a esquerda de " . $node->valor . "<br>";
                    $node->esquerda = new No($valor);
                    if ($valor != NULL) {
                        $GLOBALS["valorEsquerda"] += 1;
                        // echo "Inserindo 200 pontos na esquerda<br>";
                    }
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
                    if ($valor != NULL) {
                        $GLOBALS["valorDireita"] += 1;
                        // echo "Inserindo 100 pontos na Direita<br>";
                    }

                }

            }

        }

    }

}