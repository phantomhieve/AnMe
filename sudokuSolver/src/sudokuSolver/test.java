package sudokuSolver;
import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JButton;
public class test extends JFrame{
	
	JPanel p= new JPanel();
	JButton b=new JButton("hello");
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		new test();

	}
	public test(){
		super("BasicSwingApp");
		setSize(500,300);
		setResizable(false);
		setDefaultCloseOperation(EXIT_ON_CLOSE);
		p.add(b);
		add(p);
		setVisible(true);
	}

}
