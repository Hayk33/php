import java.io.IOException;
import java.util.*;
    class Ognakan {
        public static void main(String args[]) throws IOException {
            char yntrutyun , antesel;
            for (;;){
                do {
                    System.out.println("ognakan");
                    System.out.println("1. if_else");
                    System.out.println("2.switch");
                    System.out.println("3. for");
                    System.out.println("4. while");
                    System.out.println("5. do-while");
                    System.out.println("6. break");
                    System.out.println("7. continue\n");
                    System.out.println("ընտրեք մեկը կամ սեղմեք q դուրս գալո համարու");
                    yntrutyun = (char) System.in.read();
                    do {
                        antesel = (char) System.in.read();
                    }while (antesel != '\n');
                }   while (yntrutyun < '1' | yntrutyun > '7' & yntrutyun != 'q');
                if (yntrutyun == 'q')
                    break;
                System.out.println("\n");
                switch (yntrutyun){
                    case '1':
                        System.out.println(" if-ի թարգմանութթյունն է ԵԹԵ ");
                        System.out.println(" if-ի գրելաձևն է if(պայման){գործողություն}");
                        System.out.println(" else-ի թարգմանությունն է ԱՅԼ");
                        System.out.println(" else-ի գրելաձևն է else(պայման){գործողություն} ");
                        break;
                    case '2':
                        System.out.println("switch-ի հիմնական նպատակն է ազատել մեզ ifից և elseից");
                        System.out.println("switch-ի գրելաձն է switch(տվյալի տեսակ){case 'ինչ որ բան': գործողություն }");
                        break;
                    case '3':
                }
            }

        }
    }
