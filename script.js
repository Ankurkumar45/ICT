<script>
var images = ["mem3.jpeg", "mem4.jpeg", "mem5.jpeg", "mem6.jpeg", "mem7.jpeg"];
var currentIndex = 0;

function changeImage() {
    var img = document.getElementById("myImage");
    img.src = images[currentIndex];
    currentIndex = (currentIndex + 1) % images.length;
}
setInterval(changeImage, 5000);
</script>