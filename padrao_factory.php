interface FormaDePagamento {
  public function calcula($total);
}

/* agora todas as classes que representam uma forma de
pagamento implementam a interface FormaDePagamento */
 
class DebitoOnline implements FormaDePagamento {
  public function calcula($total) {
    return $total * 0.93;
  }
}


public function getTotalComDesconto(FormaDePagamento $formaPagamento) {
  $total = $this->getTotal();
  $total = $formaPagamento->calcula($total);
  return $total;
}
