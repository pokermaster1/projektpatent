function addWordsEnglish() {
    var wörterListe = document.getElementById('wortListeContainer').querySelector('ul');
    var wörter = [];
    wörterListe.querySelectorAll('li').forEach(function (item) {
        wörter.push(item.textContent);
    });

    var wörterString = wörter.join(', ');

    // Bestimmen des Zielinputfelds und Schlüssels für das Speichern
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

    // Speichern der Wörter im Local Storage mit dem zugeordneten Schlüssel
    localStorage.setItem(storageKey, wörterString);

    // Eingabe der gespeicherten Wörter ins entsprechende Feld
    document.getElementById(targetInputId).value = wörterString;
}

function addWordsGerman() {
    var wörterListe = document.getElementById('wortListeContainer2').querySelector('ul');
    var wörter = [];
    wörterListe.querySelectorAll('li').forEach(function (item) {
        wörter.push(item.textContent);
    });

    var wörterString = wörter.join(', ');

    // Bestimmen des Zielinputfelds und Schlüssels für das Speichern
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

    // Speichern der Wörter im Local Storage mit dem zugeordneten Schlüssel
    localStorage.setItem(storageKey, wörterString);

    // Eingabe der gespeicherten Wörter ins entsprechende Feld
    document.getElementById(targetInputId).value = wörterString;
}

function loadWords() {
    // Laden der Wörter aus dem Local Storage für jedes Inputfeld
    var fields = ['inputFirstPatent', 'inputSecondPatent', 'inputThirdPatent'];
    fields.forEach(function(field, index) {
        var storageKey = 'gespeicherteWörter' + (index + 1);
        var gespeicherteWörter = localStorage.getItem(storageKey);
        if (gespeicherteWörter && document.getElementById(field).value === '') {
            document.getElementById(field).value = gespeicherteWörter;
        }
    });
}


// Event Listener hinzufügen, um die Wörter beim Laden der Seite zu laden
document.addEventListener('DOMContentLoaded', loadWords);

function clearAllValues() {
    // Alle Inputfelder leeren
    document.getElementById('inputFirstPatent').value = '';
    document.getElementById('inputSecondPatent').value = '';
    document.getElementById('inputThirdPatent').value = '';

    // Löschen der gespeicherten Wörter aus dem Local Storage für jedes Feld
    localStorage.removeItem('gespeicherteWörter1');
    localStorage.removeItem('gespeicherteWörter2');
    localStorage.removeItem('gespeicherteWörter3');
}
