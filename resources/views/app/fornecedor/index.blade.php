<h3> Fornecedor </h3>
{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

@php 
    // Aqui pode ser comentado com a sintaxe do PHP
    /**
        Testando
     */
     echo 'Aqui da pra executar comandos PHP';
@endphp

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem Alguns fornecedores cadastrados </h3>
@elseif(count($fornecedores) > 10)
    <h3> Existem Vários fornecedores cadastrados </h3>
@else 
    <h3> Ainda não existem fornecedores cadastrados </h3>
@endif
{{-- o unless é um if inverso, so entra na condição se o resultado da condição for FALSE --}}
@unless(count($fornecedores) > 10)
    <h3> Entro no unless</h3>
 @endunless   

 {{-- caso nao queira utilizar o isset dentro de um IF vc pode falar ele direto --}}
 @isset($fornecedores)
  {{-- Mesma coisa com o empty --}}
  @empty($fornecedores)
    <h3> Caso fornecedores tiver o valor vazio entra aqui</h3>
    @endempty
 <h3> Entro no Isset</h3>
 @endisset

{{-- $variavel testada nao estiver definida (isset)
    ou
    $variável testada possuir o valor null
    assim o valor default será ''
    se não retorna a prórpio valor
--}}
{{ $fornecedores[0] ?? ''}}

{{-- Exemplo de switch no blade --}}
@switch($fornecedores[0])
    @case ('testando')
        Entro no switch
        @break
@endswitch
@dd($fornecedores)