var productBox=document.querySelectorAll('.details-product');

function showDetails(event){
    var ProductId=event.target.getAttribute('data-product-id');
    
    if(ProductId){
        var ProductUrl='single-page?product-id='+ProductId;
    window.location.href=ProductUrl;
    }else{
        window.location.href="404.html"
    }
}
productBox.forEach(function (Product){
    var productDetails=Product.querySelectorAll('.title,.image,.button-custom')
    
    productDetails.forEach(function(element){
        element.addEventListener('click',showDetails)


    })
});