$( function() {
    $( "#terms" ).autocomplete({
        source: 'db-search.php',
        minLength: 2,
        select: function(event, ui) {
            var url = ui.item.id;
            console.log(url)
            if (url != '#') {
                location.href = `db-all-places.php?id=` + url;
            }
        },
    });

    $( "#terms-index" ).autocomplete({
        source: 'db-search.php',
        minLength: 2,
        select: function(event, ui) {
            var url = ui.item.id;
            console.log(url)
            if (url != '#') {
                location.href = `db-all-places-index.php?id=` + url;
            }
        },
    });
});