import 'preline';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

String.prototype.replaceAt = function (index, char) {
    const a = this.split('');

    a[index] = char;

    return a.join('');
};
