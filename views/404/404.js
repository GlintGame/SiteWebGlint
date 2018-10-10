/* has noisejs dependency */
class LightCanvas 
{
    constructor()
    {
        this.canvas = document.querySelector('#flickering-light');
        this.ctx = this.canvas.getContext("2d");

        // get mouse position data
        this.mouse = { x: undefined, y: undefined }     
        window.addEventListener('mousemove', e => {
            this.mouse.x = e.clientX;
            this.mouse.y = e.clientY;
            this.canvas.style.setProperty('--x-light',`${this.mouse.x - 1920}px`);
            this.canvas.style.setProperty('--y-light',`${this.mouse.y - 1080}px`);
            // this.canvas.style.maskPosition = `${this.mouse.x - 1920}px ${this.mouse.y - 1080}px`;
        });

        // initialize noise
        this.noise = new Noise();
        this.noise.seed(Math.random());
        this.time = 0;

        // make sure the canvas is the size of the screen
        this.setCanvasDimentions();
        window.addEventListener("resize", this.setCanvasDimentions.bind(this));

        // start animating
        this.update();
    }

    setCanvasDimentions() 
    {
        this.canvas.width = window.innerWidth;
        this.canvas.height = window.innerHeight;
        this.imgData = this.ctx.createImageData(this.canvas.width,this.canvas.height);
    }

    // called on each frames
    update() 
    {
        this.createNoiseImage();
        requestAnimationFrame(this.update.bind(this));
    }

    createNoiseImage() 
    {
        for(let y = 0; y <this.canvas.height; y++)
        {
            for(let x = 0; x < this.canvas.width; x++)
            {
                let value = Math.abs(this.noise.perlin3(x /150, y/150, this.time)) * 20;
                let cell = (x + y * this.canvas.width) * 4;
                this.imgData.data[cell] = this.imgData.data[cell + 1] = this.imgData.data[cell + 2] = value; // rgb chanel
                this.imgData.data[cell + 3] = 255; // base alpha
            }
        }
        this.time += 0.01;
        this.ctx.putImageData(this.imgData, 0, 0);
    }
}

const light = new LightCanvas();