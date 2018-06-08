<?php
namespace Admin\Controller;

use Think\Controller;

class CateController extends Controller{
    public function lst(){
        $Cate=D('Cate');
        $cateres=$Cate->order('sort asc')->select();
        $this->assign('cateres',$cateres);
         $this->display();
    }
    //新增
    public function add(){
        $cate=D('Cate');
        if(IS_POST){
            $data['catename']=I('catename');
            $data['sort']=$cate->max('id')+1;
            if($cate->create($data)){
                if($cate->add()){
                    $this->success('添加栏目成功！',U('lst'));
                }else{
                    $this->error('添加栏目失败！');
                }
            }else{
                $this->error($cate->getError());
            }

            return;
        }
        $this->display();



    }
    //修改
    public function updata(){
        $cate=D('cate');
        if (IS_POST) {
            $data = array(
                'catename' => I('post.catename'),
                'id' => I('id'),
            );
            if($cate->create($data)){
                $save=$cate->save();
                if( $save !== false){
                    $this->success('修改栏目成功！',U('lst'));
                }else{
                    $this->error('修改栏目失败！');
                }

            }else{
                $this->error($cate->getError());
            }
            return;


        }
    //echo I('post.catename');
        $cates=$cate->find(I('id'));
        $this->assign('cates',$cates);
        $this->display();
    }
    //删除
    public function del(){
        $cate=D('cate');
        if($cate->delete(I('id'))){
            $this->success('删除栏目成功！',U('lst'));
        }else{
            $this->error('删除栏目失败！');
        }
    }
    //排序
    public function sort(){
        $cate=D('cate');
        foreach ($_POST as $id => $sort) {
            $cate->where(array('id'=>$id))->setField('sort',$sort);
        }
        $this->success('排序成功！',U('lst'));
    }
}