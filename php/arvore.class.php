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

                    // se nodo esquerdo vazio insere o novo modo aqui
                    echo "Inserido" . $valor . " a esquerda de " . $node->valor . "<br>";
                    $node->esquerda = new No($valor);
                    $GLOBALS["valorEsquerda"] += 200;
                }

                // Verifica se o valor a ser inserido é maior que o nodo corrente da árvore, se sim vai para subarvore direta
            } elseif ($valor > $node->valor) {

                // Se tiver elemento no modo direto continua a busca
                if ($node->direita != NULL) {

                    $this->inserir($node->direita, $valor);

                } else {

                    // Se nodo direito vazio insere o novo modo aqui
                    echo "Inserindo " . $valor . " a direita de " . $node->valor . "<br>";
                    $node->direita = new No($valor);
                    $GLOBALS["valorDireita"] += 100;

                }

            }

        }

    }

    public function em_ordem($no) {
        if($no != null){
            $this->em_ordem($no->esquerda);
            echo $no->valor . " ";
            $this->em_ordem($no->direita);
        }
    }

    public function remove_valor_minimo_da_arvore($node) {
        if ($node == NULL) {
            echo "<br> Árvore vazia. <br>";
        } else if ($node->esquerda != NULL) {
            $node->esquerda = $this->remove_valor_minimo_da_arvore($node->esquerda);
            return $node;
        } else {
            return $node->direita;
        }
        return NULL;
    }

    public function prefixado($no) {
        if($no != null){
            echo $no->valor . " ";
            $this->prefixado($no->esquerda);
            $this->prefixado($no->direita);
        }
    }

    public function posfixado($no) {
        if($no != NULL){
            $this->posfixado($no->esquerda);
            $this->posfixado($no->direita);
            echo $no->valor . " ";
        }
    }

    public function buscar($node, $valor, $nivel = 9) {

        if ( $node->valor == $valor ) {
            return $nivel;

        } elseif ( $node->valor < $valor && is_object($node->direita) ) {
            echo 'direita<br>';
            $nivel++;
            $this->buscar($node->direita, $valor, $nivel);

        } elseif ( $node->valor > $valor && is_object($node->esquerda) ) {
            echo 'esquerda<br>';
            $nivel++;
            $this->buscar($node->esquerda, $valor, $nivel);

        } else {
            return 'false';
        }
    }

}