// Initialize Nette Forms on page load
import netteForms from 'nette-forms';

netteForms.initOnLoad();

import naja from 'naja';

document.addEventListener('DOMContentLoaded', () => {
    naja.initialize();
});
