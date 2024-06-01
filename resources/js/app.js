import './bootstrap';

import Alpine from 'alpinejs';

import { 
    Tooltip,
    Dropdown,
    initTWE,
} from 'tw-elements'; //import TW elements

window.Alpine = Alpine;

Alpine.start();

//init here the imported TW elements
const myTooltip = new Tooltip(document.getElementById('my-tooltip'));
initTWE({ Dropdown });
