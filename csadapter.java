package com.example.aniksha.qwerty.CLASSES;

import android.content.Context;
import android.content.Intent;
import android.support.annotation.NonNull;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import com.example.aniksha.qwerty.Main2Activity;
import com.example.aniksha.qwerty.R;
import com.example.aniksha.qwerty.SecondActivity;

import java.util.ArrayList;

public class csadapter extends RecyclerView.Adapter<csadapter.holder> {


    Context c;
    int rlayout;
    ArrayList<category> ldata;

    public csadapter(Context c, int rlayout, ArrayList<category> ldata) {
        this.c = c;
        this.rlayout = rlayout;
        this.ldata = ldata;
    }


    @NonNull
    @Override
    public csadapter.holder onCreateViewHolder(@NonNull ViewGroup viewGroup, int i) {
        LayoutInflater inflater = LayoutInflater.from(c);
        View v = inflater.inflate(R.layout.rowlayout, viewGroup, false);
        return new holder(v);
    }

    @Override
    public void onBindViewHolder(@NonNull csadapter.holder holder, int i) {
        category c = ldata.get(i);
        holder.t.setText(ldata.get(i).getService());

    }

    @Override
    public int getItemCount() {
        return ldata.size();
    }

    class holder extends RecyclerView.ViewHolder implements View.OnClickListener {
        TextView t;
        ImageView i;

        public holder(@NonNull View itemView) {
            super(itemView);
            c = itemView.getContext();
            t = (TextView) itemView.findViewById(R.id.t1);
            i = (ImageView) itemView.findViewById(R.id.i1);
            itemView.setOnClickListener(this);
        }

        @Override
        public void onClick(View view) {
            final Intent intent;
            switch (getAdapterPosition()) {
                case 0:
                    intent = new Intent(c, FirstActivity.class);
                    break;

                case 1:
                    intent = new Intent(c, SecondActivity.class);
                    break;
                default:
                    intent = new Intent(c, Main2Activity.class);
                    break;
            }
            c.startActivity(intent);



        }
    }
}


