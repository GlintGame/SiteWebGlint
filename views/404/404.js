/* has noisejs dependency */
class LightCanvas 
{
    constructor()
    {
        this.mouse = { x: undefined, y: undefined }
        this.dimentions = { w: undefined, h: undefined }        

        this.canvas = document.querySelector('#flickering-light');
        this.ctx = this.canvas.getContext("2d");

        // make sure the canvas is the size of the screen
        this.setCanvasDimentions();
        window.addEventListener("resize", this.setCanvasDimentions);

        // get mouse position data
        window.addEventListener('mousemove', e => {
            this.mouse.x = e.clientX;
            this.mouse.y = e.clientY;
        });

        // initialize noise
        this.noise = new Noise();
        this.noise.seed(Math.random());
        this.time = 0;

        this.update();
    }

    setCanvasDimentions() {
        this.canvas.width = window.innerWidth;
        this.canvas.height = window.innerHeight;

        this.dimentions.w = window.innerWidth;
        this.dimentions.h = window.innerHeight;
    }

    update() {
        let imgData = this.createNoiseImage();
        this.ctx.putImageData(imgData, 0, 0);

        requestAnimationFrame(this.update.bind(this));
    }

    createNoiseImage() {
        
        let imgData = this.ctx.createImageData(this.dimentions.w, this.dimentions.h);
        let data = imgData.data;

        for(let y = 0; y < this.dimentions.h; y++){
            for(let x = 0; x < this.dimentions.w; x++){

                let value = Math.abs(this.noise.perlin3(x /150, y/150, this.time)) * 5;

                let diffPointMouse = Math.sqrt(Math.pow(this.mouse.x - x, 2) + Math.pow(this.mouse.y - y, 2));

                let cell = (x + y * this.dimentions.w) * 4;
                data[cell] = data[cell + 1] = data[cell + 2] = value; // rgb chanel
                data[cell + 3] = Math.sqrt(diffPointMouse * 120) + 70; // alpha chanel

            }
        }
        this.time += 0.03;
        return imgData;
    }

}

const light = new LightCanvas();
