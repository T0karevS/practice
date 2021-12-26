$('.form1').submit(function(e){
    e.preventDefault();
    let th=$(this);
    let btn = th.find('.header__but');
    $.ajax({
        url: '/search.php',
        method: 'post',
        dataType: 'html',
        data: th.serialize(),
        success: function(data){ 
            console.log(data);
            document.querySelector(".knigi").innerHTML = data;
        }        
    })
    });