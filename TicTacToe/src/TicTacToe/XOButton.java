package TicTacToe;
import javax.swing.*;
import java.awt.event.*;
public class XOButton extends JButton implements ActionListener{
	ImageIcon X,O;
	public XOButton(){
		X=new ImageIcon("/Users/atulkhetan/Desktop/github/projects/TicTacToe/X.png");
		O=new ImageIcon("/Users/atulkhetan/Desktop/github/projects/TicTacToe/O.png");
		this.addActionListener(this);
	}
	public void actionPerformed(ActionEvent e){
		JButton button = (JButton)e.getSource(); 
        String label= button.getText();
        int box = Integer.parseInt(label);
        if(BackEnd.isEmpty(box)){
        		byte value= BackEnd.player;
        		switch(value){
        		case 1:
        			setIcon(X);
        			break;
        		case 2:
        			setIcon(O);
        			break;
        		}
        		if(BackEnd.checkWin()){
        			JOptionPane.showMessageDialog(null, "Player : "+ value+" wins");
        			System.exit(0);
        		}
        		if(BackEnd.checkTie()){
        			JOptionPane.showMessageDialog(null,"The game was a tie");
        			System.exit(0);
        		}
        		BackEnd.setPlayer();
        }
	}
}
