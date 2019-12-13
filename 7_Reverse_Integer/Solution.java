import java.lang.reflect.Array;
import java.util.ArrayList;

class Solution {
    static Integer reverse(int num) {

        int pop, i;
        ArrayList<Integer> tempArr = new ArrayList<Integer>();
        String numberString = new String();
        boolean isNegative = false;

        if (num == Integer.MIN_VALUE) {
            return 0;
        }

        if (num < 0) {
            isNegative = true;
            num = Math.abs(num);
        }

        while (num >= 10) {
            pop = num % 10;
            numberString += Integer.toString(pop);
            num = num / 10;
        }
        numberString += Integer.toString(num);
        try{
            if (isNegative) {
                return Integer.parseInt(numberString) * -1;
            }
            else {
                return Integer.parseInt(numberString);
            }
        }catch(Exception e){
            return 0;
        }
        
        
    }

    public static void main(String[] args) {
        System.out.println(reverse(-214748364));
    }
}