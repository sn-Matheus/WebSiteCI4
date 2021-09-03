<p>Mensagem do site:</p>
<table>
    <tr>
        <td style="width: 90px;"><strong>Usuário:</strong></td>
        <td><?php echo $nome ?></td>
    </tr>
    <tr>
        <td><strong>E-mail:</strong></td>
        <td><?php echo $email ?></td>
    </tr>
    <tr>
        <td><strong>Telefone: </strong></td>
        <td><?php echo $telefone ?></td>
    </tr>
    <tr>
        <td><strong>Mensagem:</strong></td>
    </tr>
    <tr>
        <td colspan="2"><?php echo nl2br($mensagem) ?></td>
    </tr>
</table>