function addWordsEnglish() {
    var wörterListe = document.getElementById('wortListeContainer').querySelector('ul');
    var wörter = [];
    wörterListe.querySelectorAll('li').forEach(function (item) {
        wörter.push(item.textContent);
    });

    var wörterString = wörter.join(', ');

    var targetInputId;
    var storageKey;
    if (document.getElementById('inputFirstPatent').value === '') {
        targetInputId = 'inputFirstPatent';
        storageKey = 'gespeicherteWörter1';
    } else if (document.getElementById('inputSecondPatent').value === '') {
        targetInputId = 'inputSecondPatent';
        storageKey = 'gespeicherteWörter2';
    } else {
        targetInputId = 'inputThirdPatent';
        storageKey = 'gespeicherteWörter3';
    }

    localStorage.setItem(storageKey, wörterString);

    document.getElementById(targetInputId).value = wörterString;
}

function addWordsGerman() {
    var wörterListe = document.getElementById('wortListeContainer2').querySelector('ul');
    var wörter = [];
    wörterListe.querySelectorAll('li').forEach(function (item) {
        wörter.push(item.textContent);
    });

    var wörterString = wörter.join(', ');

    var targetInputId;
    var storageKey;
    if (document.getElementById('inputFirstPatent').value === '') {
        targetInputId = 'inputFirstPatent';
        storageKey = 'gespeicherteWörter1';
    } else if (document.getElementById('inputSecondPatent').value === '') {
        targetInputId = 'inputSecondPatent';
        storageKey = 'gespeicherteWörter2';
    } else {
        targetInputId = 'inputThirdPatent';
        storageKey = 'gespeicherteWörter3';
    }

    localStorage.setItem(storageKey, wörterString);

    document.getElementById(targetInputId).value = wörterString;
}

function loadWords() {

    var fields = ['inputFirstPatent', 'inputSecondPatent', 'inputThirdPatent'];
    fields.forEach(function(field, index) {
        var storageKey = 'gespeicherteWörter' + (index + 1);
        var gespeicherteWörter = localStorage.getItem(storageKey);
        if (gespeicherteWörter && document.getElementById(field).value === '') {
            document.getElementById(field).value = gespeicherteWörter;
        }
    });
}


document.addEventListener('DOMContentLoaded', loadWords);

function clearAllValues() {
    document.getElementById('inputFirstPatent').value = '';
    document.getElementById('inputSecondPatent').value = '';
    document.getElementById('inputThirdPatent').value = '';

    localStorage.removeItem('gespeicherteWörter1');
    localStorage.removeItem('gespeicherteWörter2');
    localStorage.removeItem('gespeicherteWörter3');
}
