document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const word = document.getElementById('word').value;
        fetch(`https://www.openthesaurus.de/synonyme/search?q=${encodeURIComponent(word)}&format=application/json&similar=true`)
            .then(response => response.json())
            .then(data => {
                const resultsContainer = document.querySelector('.results-deutsch');
                resultsContainer.innerHTML = '';
                if (data.synsets.length > 0) {
                    const list = document.createElement('ul');
                    new Set(data.synsets.flatMap(synset => synset.terms.map(term => term.term))).forEach(term => {
                        const item = document.createElement('li');
                        item.textContent = term;
                        list.appendChild(item);
                    });
                    resultsContainer.appendChild(list);
                } else {
                    resultsContainer.innerHTML = '<p>Keine deutschen Synonyme gefunden.</p>';
                }
            })
            .catch(error => {
                console.error('Error fetching synonyms:', error);
                document.querySelector('.results-deutsch').innerHTML = '<p>Fehler beim Abrufen der Synonyme.</p>';
            });
    });
});


document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const word = document.getElementById('word').value;
        const headers = {
            "X-RapidAPI-Key": "17e1936995msh810d5a055de8d9bp1adc3bjsn7296c038812c",
            "X-RapidAPI-Host": "wordsapiv1.p.rapidapi.com"
        };
        fetch(`https://wordsapiv1.p.rapidapi.com/words/${encodeURIComponent(word)}/synonyms`, { headers })
            .then(response => response.json())
            .then(data => {
                const resultsContainer = document.querySelector('.results-english');
                resultsContainer.innerHTML = '';
                if (data.synonyms && data.synonyms.length > 0) {
                    const list = document.createElement('ul');
                    new Set(data.synonyms).forEach(synonym => {
                        const item = document.createElement('li');
                        item.textContent = synonym;
                        list.appendChild(item);
                    });
                    resultsContainer.appendChild(list);
                } else {
                    resultsContainer.innerHTML = '<p>Keine englischen Synonyme gefunden.</p>';
                }
            })
            .catch(error => {
                console.error('Error fetching synonyms:', error);
                document.querySelector('.results-english').innerHTML = '<p>Fehler beim Abrufen der Synonyme.</p>';
            });
    });
});
