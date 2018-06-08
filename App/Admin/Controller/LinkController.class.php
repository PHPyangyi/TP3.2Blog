<?php
namespace Admin\Controller;
use Think\Controller;

class LinkController extends CommonController {
    public function lst(){
        $link=D('link');
        $count=$link->count();// 查询满足要求的总记录数

        $Page= new \Think\Page($count,2);

        $show=$Page->show();

        $list =$link->order('id ASC')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);// 赋值数据集

        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function add(){
        $Link=D('Link');
        if(IS_POST){
            $data=array(
                'title'=>I('post.title'),
                'url'=>I('post.url'),
                'desc'=>I('post.desc'),
                'sort'=>$Link->max('id')+1,
            );
            if($Link->create($data)){
               if($Link->add()){
                   $this->success('添加栏目成功！',U('lst'));
               }else{
                   $this->error('添加栏目失败！');
               }

            }else{
                $this->error($Link->getError());
            }
            return;
        }
        $this->display();
    }
    public function updata(){
        $Link=D('Link');
        if(IS_POST){
            $data=array(
                'url'=>I('post.url'),
                'desc'=>I('post.desc'),
                'title'=>I('post.title'),
                'id'=>I('id')
            );
            if($Link->create($data)){
               $save= $Link->save();
                if ($save){
                    $this->success('修改链接成功！');
                }else{
                    $this->error('修改链接失败！');
                }
            }else{
                $this->error($Link->getError());
            }
        }

        $links=$Link->find(I('id'));
        $this->assign('links',$links);
        $this->display();
    }
    public function del(){
        $Link=D('Link');
        if($Link->delete(I('id'))){
            $this->success('删除栏目成功！',U('lst'));
        }else{
            $this->error('删除栏目失败！');
        }
    }

    //排序
    public function sort(){
        $Link=D('Link');
        foreach ($_POST as $id => $sort) {
            $Link->where(array('id'=>$id))->setField('sort',$sort);
        }
        $this->success('排序成功！',U('lst'));
    }
}