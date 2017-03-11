import java.util.Scanner;


public class Hayk {
    public static void main(String args[]) {
        Scanner o = new Scanner(System.in);
        System.out.println("ընտրեք գործողություն");
        System.out.println("1. + ");
        System.out.println("2. - ");
        System.out.println("3. * ");
        System.out.println("4. / ");
        System.out.println("5. (x)2 ");
        System.out.println("6. √ ");
        System.out.println("7. sin ");
        System.out.println("8. tng ");
        System.out.println("9. cos ");
        int a = o.nextInt();
        double x =0.0;
        double z =0.0;
        switch (a) {
            case 1:
                System.out.println("գրեք առաջին թիվը");
                x= o.nextDouble();
                System.out.println("գրեք երկրորդ թիվը");
                z = o.nextDouble();
                System.out.println(x + z);
                break;
            case 2:
                System.out.println("գրեք երկրորդ թիվը");
                x = o.nextDouble();
                System.out.println("գրեք երկրորդ");
                z = o.nextDouble();
                System.out.println(x - z);
                break;
            case 3:
                System.out.println("գրեք առաջին թիվը");
                x = o.nextDouble();
                System.out.println("գրեք երկրորդ");
                z = o.nextDouble();
                System.out.println(x*z);
                break;
            case 4:
                System.out.println("գրեք առաջին թիվը");
                x = o.nextDouble();
                System.out.println("գրեք երկրորդ");
                z = o.nextDouble();
                System.out.println(x/z);
                break;
            case 5:
                System.out.println("գրեք թիվը");
                x = o.nextDouble();
                System.out.println(x*x);
                break;
            case 6:
                System.out.println("գրեք այն թիվը վորից ուզում եք արմատ հանել");
                x = o.nextDouble();
                System.out.println(Math.sqrt(x));
                break;
            case 7:
                System.out.println("գրեք թիվը");
                z= o.nextDouble();
                System.out.println(Math.sin(z));
                break;
            case 8:
                System.out.println("գրեք թիվը");
                z= o.nextDouble();
                System.out.println(Math.tan(z));
                break;
            case 9:
                System.out.println("գրեք թիվը");
                z= o.nextDouble();
                System.out.println(Math.cos(z));
                break;
        }
    }
}
