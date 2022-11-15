function update() {
    // World Stats
    let data = JSON.parse(atob("<?php echo base64_encode(file_get_contents('./stats.json')); ?>"));

    document.all['players'].textContent = String(data.players + ' player(s) have spawned at least once in the server.');
    document.all['years'].textContent   = String('The Map is ' + data.years + ' years, ');
    document.all['months'].textContent  = String(data.months + ' months and ');
    document.all['days'].textContent    = String(data.days + ' days old and has a file size of ');
    document.all['size'].textContent    = String(data.size + ' GB');

    // Balance
    let bal = JSON.parse(atob("<?php echo base64_encode(file_get_contents('./balance.json')); ?>"))

    document.all['bal-amount'].textContent = String('$' + bal.wallet + ' / $' + bal.costs + ' + bal.currency);
    document.all['bal-month'].textContent  = String(bal.month);
}

// Background Image
(new Image).src = '/assets/render.jpg';
(new Image).src = '/assets/renderl.jpg';

window.onload = function() {
    update();
    setTimeout(function() {
         document.body.parentElement.style.backgroundImage = 'url("/assets/renderl.jpg")';
         setTimeout(function() {
             document.body.style.backgroundImage = '';
         }, 1000);
    }, 1000);
};
