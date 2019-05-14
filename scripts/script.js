var $container = document.getElementById('container');

$container.addEventListener('click', function() {
    event.preventDefault();
    if (event.target.tagName === 'IMG') {

        var $a = event.target.parentElement;
        var path = $a.href;

        var $image = document.createElement('img');
        $image.src = path;
        $image.alt = event.target.alt;

        var $preview = document.getElementById('preview');
        $preview.innerHTML = '';
        $preview.appendChild($image);

        var $modal = document.getElementById('myModal');
        var $span = document.getElementsByClassName('close')[0];

        $modal.style.display = 'block';
        $span.onclick = function() {
            $modal.style.display = 'none';
        }
    }
});