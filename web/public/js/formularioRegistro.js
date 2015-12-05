/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $('.cliente').hide();
    $('.cuidador').hide();
    
    $("input[name=tipo-usuario]").click(function () {
        if ($(this).val() === 'cliente'){
            $('.cliente').show();
            $('.cuidador').hide();
        }else if ($(this).val() === 'cuidador'){
            $('.cuidador').show();
            $('.cliente').hide();
        }
    });
});

