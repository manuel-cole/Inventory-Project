import java.util.Scanner;
import java.util.*;

public class Main {


        public static void main(String args[])
        {
            Scanner sc=new Scanner(System.in);
            System.out.println("Enter a Text: ");
            String s=sc.nextLine();
            String str=s.toLowerCase();

            String cadena = str;
            String delimitadores= "[ .,;?!¡¿\'\"\\[\\]]+";
            String[] palabrasSeparadas = cadena.split(delimitadores);

            for(int x=0; x<palabrasSeparadas.length; x++)
            {
                char[] tmpstr = palabrasSeparadas[x].toCharArray();
                for(int y=0; y<tmpstr.length; y++)
                {
                    if((y+1) < tmpstr.length)
                    {
                        if(tmpstr[y] == tmpstr[y+1])
                        {
                            System.out.print(palabrasSeparadas[x] + " ");
                        }
                    }
                }
            }

            System.out.println("");
        }
    }
