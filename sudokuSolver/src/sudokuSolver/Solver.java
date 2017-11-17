package sudokuSolver;
public class Solver {
	private int [][]board;
	private int size;
	Solver(int [][]board,int size){
		this.size=size;
		this.board=board;
	}
	private boolean colSafe(int x,int num){
		for(int i=0;i<size;i++){
			if(board[x][i]==num)
				return false;
		}
		return true;
	}
	private boolean rowSafe(int y,int num){
		for(int i=0;i<size;i++){
			if(board[i][y]==num)
				return false;
		}
		return true;
	}
	private boolean boxSafe(int x,int y,int num){
		int boxSize=(int)Math.sqrt(this.size);
		int startI=(x/boxSize)*boxSize,startJ=(y/boxSize)*boxSize;
		for(int i=startI;i<startI+boxSize;i++){
			for(int j=startJ;j<startJ+boxSize;j++){
				if(board[i][j]==num)
					return false;
			}
			
		}
		return true;
	}
	private boolean canPlace(int x,int y,int num){
		if(! colSafe(x,num))
			return false;
		if(! rowSafe(y,num))
			return false;
		if(! boxSafe(x,y,num))
			return false;
		
		return true;
	}
	public boolean solve(){
		int x=-1,y=-1;
		boolean isEmpty=false;
		for(int i=0;i<this.size;i++){
			for(int j=0;j<this.size;j++){
				if(this.board[i][j]==0){
					isEmpty=true;
					x=i;y=j;
				}
				if(isEmpty)
					break;
			}
		}
		if(!isEmpty)
			return true;
		for(int i=1;i<this.size+1;i++){
			if(canPlace(x,y,i)){
				board[x][y]=i;
				if(solve())
					return true;
				this.board[x][y]=0;
			}
		}
		return false;
	}
}
