
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <?php include "{$data['header']}.php"; ?>
    </head>
	<body>
      <?php include "{$data['nav']}.php"; ?>
      <div class="content">
	  	<h1>Exemplo de tradução</h1>
        <p class="normal">Tradução do texto pode ser feito facilmente adicionando funções para modelo tags. </p>
        <p class="normal">Exemplo abaixo mostra-lhe 2 sabores em traduzir as mensagens em diferentes línguas.</p>
        <pre>
<span style="color: yellow;"># in controller</span>
$data['dynamic_msg'] = 'This can be translated';
$data['dynamic_key_msg'] = array('welcome_user', 'Welcome to my site, Mr. User!');
$data['dynamic_key_msg2'] = array('input_invalid', 'Invalid input for email address.');

<span style="color: yellow;"># in view</span>
{<span>{</span>t(dynamic_msg)}}
{<span>{</span>t2(dynamic_key_msg)}}
{<span>{</span>t2(dynamic_key_msg2)}}
        </pre>
       <span class="totop"><a href="#top">Voltar ao topo</a></span>
       </div>
	</body>
</html>
