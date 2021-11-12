
// évite le remplissage css de l'input dans chrome
function fix_autocomplete_shit() {
    setTimeout(() => {
        if ($(this).is(':-internal-autofill-selected')) {
            var clone = $(this).clone(true, true);
            $(this).after(clone);
            $(this).remove();
        }
    }, 10);
}
$('.input-list').on('input', fix_autocomplete_shit);

