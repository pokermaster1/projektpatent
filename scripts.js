function addWordsEnglish() {
    var wörterListe = document.getElementById('wortListeContainer').querySelector('ul');
    var wörter = [];
    wörterListe.querySelectorAll('li').forEach(function (item) {
        wörter.push(item.textContent);
    });

    var wörterString = wörter.join(', ');

    // Überprüfen, ob das erste Input-Feld leer ist
    if (document.getElementById('inputFirstPatent').value === '') {
        document.getElementById('inputFirstPatent').value = wörterString;
    } else if (document.getElementById('inputSecondPatent').value === '') {
        // Wenn das erste Feld nicht leer ist, überprüfe das zweite Feld
        document.getElementById('inputSecondPatent').value = wörterString;
    } else {
        // Wenn das erste und das zweite Feld nicht leer sind, schreibe in das dritte Feld
        document.getElementById('inputThirdPatent').value = wörterString;
    }
}
