const canvas = document.getElementById('myCanvas');
const ctx = canvas.getContext('2d');

// Rectangle
ctx.fillStyle = 'blue';
ctx.fillRect(50, 50, 100, 50);

// Circle
ctx.beginPath();
ctx.arc(200, 100, 40, 0, 2 * Math.PI);
ctx.fillStyle = 'green';
ctx.fill();
ctx.closePath();

// Line
ctx.beginPath();
ctx.moveTo(50, 200);
ctx.lineTo(300, 300);
ctx.strokeStyle = 'red';
ctx.stroke();
ctx.closePath();