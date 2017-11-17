package TicTacToe;
public class BackEnd {
	public static byte[][] board= new byte[3][3];
	public static byte player=1;
	public static boolean isEmpty(int pos){
		int i=pos/3,j=pos%3;
		if(board[i][j]==0){
			//make move
			board[i][j]=player;
			return true;
		}
		return false;
	}
	public static boolean checkWin(){
		boolean check1=true,check2=true;
		for(int i=0;i<3;i++){
			check1=check2=true;
			for(int j=0;j<3;j++){
				if(board[i][j]!=player)
					check1=false;
				if(board[j][i]!=player)
					check2=false;
			}
			if(check1)
				return true;
			if(check2)
				return true;
		}
		if(board[0][0]==player && board[1][1]==player && board[2][2]==player)
			return true;
		if(board[0][2]==player && board[1][1]==player && board[2][0]==player)
			return true;
		return false;
	}
	public static void setPlayer(){
		if(player==1)
			player=2;
		else
			player=1;
	}
	public static boolean checkTie(){
		for(int i=0;i<9;i++){
			int a=i/3,j=i%3;
			if(board[a][j]==0)
				return false;
		}
		return true;
	}
}


