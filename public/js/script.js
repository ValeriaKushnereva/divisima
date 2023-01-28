let imgs = document.querySelectorAll('img[src]');
imgs.forEach(element => {
    let src = element.src;
    let matches = src.match(/img.+/);
    element.src = WWW + '/' + matches[0];
    //Для  div[data-setbg] слайдера поставить вручную путь в верстке
});