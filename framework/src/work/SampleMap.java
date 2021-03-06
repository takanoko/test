package work;

import java.util.HashMap;
import java.util.Map;

public class SampleMap {

	public static void main(String[] args){
	Map<String,String>map=new HashMap<String,String>();

	//値のセットはputメゾット
	map.put("key1","value1");
	map.put("key2","value2");
	map.put("key3","value3");
	map.put("key4","value4");
	map.put("key5","value5");

	//値の取得
	String value=map.get("key1");//value1を取得
	System.out.println(value);

	String valueNull=map.get("key6");//存在しないKeyはNull
	System.out.println(valueNull);

	//mapに該当するKeyが存在するかチェック
	if(map.containsKey("key1")){
		System.out.println("key1は存在します");
	}else{
		System.out.println("key1は存在しません");
	}

	//拡張for文ですべての情報を取得
	for(Map.Entry<String,String>e:map.entrySet()){
		System.out.println(e.getKey()+":"+e.getValue());
	}
	}

}
