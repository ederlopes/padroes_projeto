interface MessageSenderInterface
{
    // ...
    public function send(string $message) : bool;
    public function isValidSender() : bool;
}

class EmailMessageStrategy implements MessageSenderInterface
{
    // ...
    public function send(string $message) : bool
    {
        // Valida de acordo com a regra deste tipo de mensagem
        if ($this->isValidSender()) {
            return $this->sendMessage($message);
        }
        return false;
    }

    public function isValidSender() : bool
    {
        if ($this->customer->fromOnline() && $this->customer->hasEmail()) {
            return true;
        }
        return false;
    }
}


class MessageStrategy implements MessageSenderInterface
{
    // ...
    public function __construct(MessageSenderInterface $sender)
    {
        // Guardamos o objeto Message com suas regras e implementações
        $this->sender = $sender;
    }

    public function send(string $message) : bool
    {
        // Retorna a validação de acordo com a regra do objeto
        return $this->sender->send($message);
    }

    public function isValidSender() : bool
    {
        return $this->sender->isValidSender();
    }
}

// ...
// Ao criar o objeto MessageStrategy devemos informar qual o tipo de envio
$message = new MessageStrategy(new EmailMessageStrategy);

// O método invoca o send original da classes anteriormente adicionada
$message->send('Seu produto está a caminho da entrega');
