
// the main function, the one attached to the canvas
function gameOfLife(processing) {
    processing.draw = function() {
        var cellSize = 5; // px
        var board;
        var nCellsAcross;
        var nCellsDown;
        
        function initBoard(){
            var aliveProb = 0.3;
            
            var nCellsAcross = Math.ceil($(document).width() / cellSize);
            var nCellsDown   = Math.ceil($(document).height() / cellSize);
            
            var board = new Array(nCellsAcross);
            
            for(var row = 0; row < nCellsAcross; row += 1){
                board[row] = new Array(nCellsDown);
                
                for(var col = 0; col < nCellsDown; col += 1){
                    board[row][col] = ( Math.random() < aliveProb);
                }
            }
            
            return board;
        } // end of function initBoard
    
        
        function drawBoard(board) {
            
            for(var row = 0; row < nCellsAcross; row += 1){    
                for(var col = 0; col < nCellsDown; col += 1){
                    if(board[row][col]){
                        fill(255);
                    }else{
                        fill(0);
                    }
                    
                    rect(row*cellSize, coll*cellSize,cellSize,cellSize);
                }
            }
            
        } // end of function drawBoard
    
        
        function nextGeneration(){
    
        } // end of function nextGeneration
    
        
        // initialize the board and window
        processing.width = $(document).width();
        processing.height = $(document).height();
      
        board = initBoard();
      
        
        drawBoard(board);
        nextGeneration();
    } // end of processing.draw
} // end of function gameOfLife

