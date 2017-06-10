const canvas=document.getElementById('tetris');         //getting canvas from index.html 
const context= canvas.getContext('2d');                       //object which can be used to draw text, lines, boxes, circles, and more - on the canvas.
context.scale(20,20)                                                    //Scales the current drawing bigger or smaller


context.fillStyle = "#0000FF";                                  //Sets or returns the color, gradient, or pattern used to fill the drawing
context.fillRect(0,0,canvas.width,canvas.height);       //Fill canvas with the fillStyle Color

function arenaSweep(){                  //Function  to clear up a completely filled row and award score to player
        let rowCount=1;                         //initialize row count; let allows you to declare variables that are limited in scope to the block
        outer :for(let y= arena.length-1;y>0;y--){              //start scanning from bottom up for filled rows
                for(let x=0;x<arena[y].length;++x){             //scan a row
                        if(arena[y][x]===0){                            // if any blank pixel encountered, start scanning next row
                                continue outer;
                        }
                }
                const row = arena.splice(y,1)[0].fill(0);          //Constants are block-scoped, much like variables defined using the let statement. The value of a constant cannot change through re-assignment, and it can't be redeclared.The splice() method adds/removes items to/from an array, and returns the removed item(s).
                arena.unshift(row);                                        //The unshift() method adds new items to the beginning of an array, and returns the new length.
                ++y;
                player.score+=rowCount*10;                      //Increase PLayer scrore
                rowCount*=2;                                            //The more consecutive rows are, the more is the increment in score
        }
}

const matrix= [
                                [0,0,0],
                                [1,1,1],
                                [0,1,0],
                        ];

function createPiece(type){                                         //Creeating diferent type of pieces. applied via Square Matrix to ensure easy rotation
        if(type==='T'){
                return [
                                [0,0,0],
                                [1,1,1],
                                [0,1,0],
                        ];
        }else if(type==='O'){
                return[
                                [2,2],
                                [2,2],
                        ];
        }else if(type=='I'){
                return [
                                [0,5,0,0],
                                [0,5,0,0],
                                [0,5,0,0],
                                [0,5,0,0],
                        ];
        }else if(type==='L'){
                return [
                                [0,3,0],
                                [0,3,0],
                                [0,3,3],
                        ];
        }else if(type==='J'){
                return [
                                [0,4,0],
                                [0,4,0],
                                [4,4,0],
                        ];
        }else if(type==='S'){
                return [
                                [0,6,6],
                                [6,6,0],
                                [0,0,0],
                        ];
        }else if(type==='Z'){
                return [
                                [7,7,0],
                                [0,7,7],
                                [0,0,0],
                        ];
        }
        
}


function createMatrix(w,h)                              //Function to create a 0 matrix of given width and height
{
        const matrix=[];
        while(h--){
                matrix.push(new Array(w).fill(0));
        }
        return matrix;
}

function draw(){                                               //The draw function to fill canvas with black color and then draw the arena and player
        context.fillStyle = "#000000";
        context.fillRect(0,0,canvas.width,canvas.height);

        drawMatrix(arena,{x:0,y:0});
        drawMatrix(player.matrix,player.pos);
}


function collide(arena,player){                                         //Tells if there is a collision between the player and the frame(arena)
        const [m,o] = [player.matrix,player.pos]                //a tuple with the matrix and the offset for the player
        for(let y=0;y<m.length;++y){                                 //traversing the matrix row by row
                for(let x=0;x<m[y].length;++x){                     //traversing a row of the matrix
                        if(m[y][x]!==0 &&                                   //player matrix block is a block i.e. not =0
                                (arena[y+o.y] && arena[y+o.y][x+o.x])!==0){     //if row not zero and the elements of the row not equal to zero
                                return true;                    //Tell collision happens
                        }
                }
        }
        return false;                   //Collision not happening
}

function merge(arena,player){           //Merging the last instance of arena and player at the time when the merge function is called
        player.matrix.forEach((row,y)=>{        //The forEach() method calls a provided function once for each element in an array, in order.
                row.forEach((value,x)=>{                       // => is the lambda equivalent
                        if(value!==0){
                                arena[y+player.pos.y][x+player.pos.x]=value;    //make arena = 1 for places where tetris is non zero
                        }
                });
        });
}

function playerDrop()                           //make player move 1 position down
{
        player.pos.y++;                         //move the player down by 1 position
        if(collide(arena,player)){              //if the player collides with arena
                player.pos.y--;                    //move the player 1 step above
                merge(arena,player);            //merge the arena and the player
                playertReset();                   //Start the player from top
                arenaSweep();                   //Checkout the filled rows
                //alert("Game Over");
                updateScore();                  //Update the core
        }
        dropCounter=0;                  //no. of drops reset to 0
}

let lastTime=0;
let dropCounter=0;
let dropInterval=1000;

function update(time=0){                        //update the game, 
        const deltaTime=time-lastTime;
        lastTime=time;
        dropCounter+=deltaTime;         //keep a counter that drops the block by downarrow key press or else after every delta time
        if(dropCounter>dropInterval){
                playerDrop();
        }
        draw();
        requestAnimationFrame(update);
}

const colors=[ null , '#FF0D72' ,'#0DC2FF','#0DFF72','#F5388FF','#FF8E0D','#FFE138','#3877FF',];                //Different colors for different blocks


const arena = createMatrix(12,20);      //matrix for arena

function drawMatrix(matrix,offset){                     //draw the matrix with given values and offset
        matrix.forEach((row,y) => {
                row.forEach((value,x) => {
                        if(value!=0){
                                context.fillStyle=colors[value];
                                context.fillRect(x+offset.x,y+offset.y,1,1);
                        }
                });
        });
}

const player={                  //player object
        pos: {x:0, y: 0},
        matrix: matrix,
        score: 0,
}

function playermove(dir){               //move player to left or right
        player.pos.x+=dir;
        if(collide(arena,player)){
                player.pos.x-=dir;
        }
}

function playertReset(){                        //reset player 
        const pieces ='ILJOSTZ';
        player.matrix=createPiece(pieces[pieces.length*Math.random() | 0]);             //generating random pieces | is the floor operator
        player.pos.y=0;
        player.pos.x=(arena[0].length/2 | 0) - (player.matrix[0].length/2 | 0);

        if(collide(arena,player)){              //Game Over Situation
                arena.forEach(row=>row.fill(0));
                alert("Game Over !!! Your Score is "+player.score+" points");
                player.score=0;
                updateScore();
        }
}

function playerRotate(dir){                     //function to rotate the matrix in the given dir
        const pos = player.pos.x;
        let offset=1;
        rotate(player.matrix,dir);
        while(collide(arena,player)){
                player.pos.x+=offset;
                offset=-(offset + (offset>0 ? 1 :-1));
                if(offset>player.matrix[0].length){
                        rotate(player.matrix,-dir);
                        player.pos.x=pos;
                        return;
                }
        }
}


function rotate(matrix,dir){                    //actual rotating function
        for(let y=0; y<matrix.length;++y){
                for(let x=0;x<y;++x){
                        //Swapping : [a,b]=[b,a]
                        [
                                matrix[x][y],
                                matrix[y][x]
                        ]=[
                                matrix[y][x],
                                matrix[x][y]   
                        ];//transpose

                        if(dir>0){
                                matrix.forEach(row=>row.reverse());
                        }else{
                                matrix.reverse();
                        }

                }
        }
}

function updateScore(){                 //update the score
        document.getElementById('score').innerText=player.score;
}



document.addEventListener('keydown',event=>{
        if (event.keyCode===37) {
                playermove(-1);
        }else if (event.keyCode===39) {
                playermove(1);
        }else if (event.keyCode===40) {
                playerDrop();
        }else if (event.keyCode===81) {
                //Q key
                playerRotate(-1);
        }
        else if (event.keyCode===87) {
                //W key
                playerRotate(1);      
        }
        console.log(event);
});

playertReset();
update();
updateScore();

//console.log(arena);
//console.table(arena);