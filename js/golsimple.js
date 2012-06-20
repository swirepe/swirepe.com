
function randomBoard(xmax, ymax, prob){
	/*
	  Make a X by Y rectangular board.
	  Cells are filled according to the probability prob


	
	 */
	if(!prob){
		prob = 0.1;
	}
	var x = 0;
	var y = 0;

	var board = {};

	for(x = 0; x < xmax; x += 1){
		for(y = 0; y < ymax; y += 1){
			if(Math.random() < prob){
				board[[x,y]] = true;
			}
		}
	}

	return board;
} // end of function randomBoard



function neighbors(point){
	var x = point[0];
	var y = point[1];

	var ns = {};

	ns[ [x + 1, y] ] = true;
	ns[	[x - 1, y] ] = true;
	ns[	[x, y + 1] ] = true;
	ns[	[x, y - 1] ] = true;
	ns[	[x + 1, y + 1] ] = true;
	ns[	[x + 1, y - 1] ] = true;
	ns[	[x - 1, y + 1] ] = true;
	ns[	[x - 1, y - 1] ] = true;

	return ns;
} // end of function countNeighbors



function countLivingNeighbors(point, board){
	var count = 0;
	
	var nL = neighbors(point);
	for(n in nL){
		if(board[n]){

			count += 1;
		}
	}

	return count;
} // end of function countLivingNeighbors


function getPotentials(board){
	var pots = {};
	
	var n;

	for(var point in board){
		pots[point] = true;

		n = neighbors(point);
		for(var p in n){
			pots[p] = true;
		}

	}

	return pots;
}


function nextGeneration(board){
	var newBoard = {};

	var numNeighbors;

	var potentials = getPotentials(board);

	for(var point in potentials){

		numNeighbors = countLivingNeighbors(point, board);

		if(numNeighbors == 3){
			
			newBoard[point] = true;
		}

		if(numNeighbors == 2 && board[point]){
			newBoard[point] = true;
		}

	} // end of potentials for

	return newBoard;
} // end of function nextGeneration






function draw(){
	var board = randomBoard(100,100);

	var canvas = document.getElementById("gameoflifecanvas");  
 	var ctx = canvas.getContext("2d"); 


} // end of function draw

function onFrame(event){
	
}