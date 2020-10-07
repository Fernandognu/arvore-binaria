<?php

class Arvore {

    public function inserir($node, $valor) {

        if ($node != NULL) {

            if ($valor < $node->valor) {

                if ($node->esquerda != NULL) {

                    $this->inserir($node->esquerda, $valor);

                } else {

                    echo "Inserido" . $valor . " a esquerda de " . $node->valor . "<br>";
                    $node->esquerda = new No($valor);
                    $GLOBALS["valorEsquerda"] += 200;
                }

            } elseif ($valor > $node->valor) {

                if ($node->direita != NULL) {

                    $this->inserir($node->direita, $valor);

                } else {

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