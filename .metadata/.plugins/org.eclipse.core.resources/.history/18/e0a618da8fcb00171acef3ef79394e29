package TicTacToe;
import javax.swing.*;
import java.awt.*;
public class frontEnd extends JFrame{
	JPanel panel= new JPanel();
	XOButton buttons[]= new XOButton[9];
	
	public static void main(String arge[]){
		new frontEnd();
	}
	frontEnd(){
		super("frontEnd");
		setSize(400,400);
		setResizable(false);
		setDefaultCloseOperation(EXIT_ON_CLOSE);
		panel.setLayout(new GridLayout(3,3));
		for(int i=0;i<9;i++){
			buttons[i] = new XOButton();
			buttons[i].setText(Integer.toString(i));
			panel.add(buttons[i]);
		}
		add(panel);
		setVisible(true);
		
	}
}
