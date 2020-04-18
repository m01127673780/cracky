# jquery-shopkart
Este pequeno plugin controla cria um widget básico de carrinho de compras online.

## Iniciar com as configurações padrões
```$.shopkart();```

### Atributos data necessário para utilização padrão do plugin
- ```data-kart="display"```: Indica o display que exibirá as informaçes do carrinho
- ```data-kart-total-item```: Indica a quantidade total de itens no carrinho
- ```data-kart-total-price```: Indica o valor total do carrinho

#### Estrutura básica
```html
<div data-kart="display">
    <div data-kart-total-item="0">
        Total: 0
    </div>
    <div data-kart-total-price="0">
        Total Price: $0,00
    </div>
</div>
```

> Para manipular o display do carrinho ao adicionar ou remover items, deve-se criar um elemento com três atributos data para cada item.
1. Para identificar o botão de compras de item: ```data-kart="item-button"```
2. Para identificar o status de cada item: ```data-kart-item-status="[add-item|remove-item]"```
4. Um objeto (json) para armazenar os dados do item: ```data-kart-item='{"key":"value"}'```
```html
<button
    data-kart="item-button"
    data-kart-item-status="add-item"
    data-kart-item='{"id": 1, "descricao": "Item 01", "price": 100}'>
    Comprar
</button>
```

### Opções para configurações customizadas
> Customizar o valor da ação dos botões de Adicionar e Remover items:
```javascript
kartItemButtonStatus: {
     add: "foo",
     remove: "bar"
}
```
> Customizar os textos dos botões Adicionar e Remover items:
```javascript
kartItemButtonText: {
    add: 'Adicionar texto customizado',
    remove: 'Remover texto customizado'
}
```

> Customizar o total de items no carrinho:
```javascript
formatTotalItem: function (preco) {
    return total_item_customizado;
}
```

> Customizar o preço total do carrinho:
```javascript
formatTotalPrice: function (preco) {
    return total_preco_customizado;
}
```

> Customizar o estilo do botão Adicionar:
```javascript
styleButtonAddItem: function ($button) {
    // adicione seu próprio estilo. Ex.: $button.css('background-color': "black")
}
```

> Customizar o estilo do botão Remover:
```javascript
styleButtonRemoveItem: function ($button) {
    // adicione seu próprio estilo. Ex.: $button.css('background-color': "grey")
}
```
