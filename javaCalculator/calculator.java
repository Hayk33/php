import java.util.Scanner;


public class Hayk {
    public static void main(String args[]) {
        Scanner o = new Scanner(System.in);
        System.out.println("?????? ?????????????");
        System.out.println("1. + ");
        System.out.println("2. - ");
        System.out.println("3. * ");
        System.out.println("4. / ");
        System.out.println("5. (x)2 ");
        System.out.println("6. v ");
        System.out.println("7. sin ");
        System.out.println("8. tng ");
        System.out.println("9. cos ");
        int a = o.nextInt();
        double x =0.0;
        double z =0.0;
        switch (a) {
            case 1:
                System.out.println("???? ?????? ????");
                x= o.nextDouble();
                System.out.println("???? ??????? ????");
                z = o.nextDouble();
                System.out.println(x + z);
                break;
            case 2:
                System.out.println("???? ??????? ????");
                x = o.nextDouble();
                System.out.println("???? ???????");
                z = o.nextDouble();
                System.out.println(x - z);
                break;
            case 3:
                System.out.println("???? ?????? ????");
                x = o.nextDouble();
                System.out.println("???? ???????");
                z = o.nextDouble();
                System.out.println(x*z);
                break;
            case 4:
                System.out.println("???? ?????? ????");
                x = o.nextDouble();
                System.out.println("???? ???????");
                z = o.nextDouble();
                System.out.println(x/z);
                break;
            case 5:
                System.out.println("???? ????");
                x = o.nextDouble();
                System.out.println(x*x);
                break;
            case 6:
                System.out.println("???? ??? ???? ????? ?????? ?? ????? ?????");
                x = o.nextDouble();
                System.out.println(Math.sqrt(x));
                break;
            case 7:
                System.out.println("???? ????");
                z= o.nextDouble();
                System.out.println(Math.sin(z));
                break;
            case 8:
                System.out.println("???? ????");
                z= o.nextDouble();
                System.out.println(Math.tan(z));
                break;
            case 9:
                System.out.println("???? ????");
                z= o.nextDouble();
                System.out.println(Math.cos(z));
                break;
        }
    }
}