<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.14.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class HeartbeatTxnRangeResponse
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'aborted',
            'isRequired' => true,
            'type' => TType::SET,
            'etype' => TType::I64,
            'elem' => array(
                'type' => TType::I64,
                ),
        ),
        2 => array(
            'var' => 'nosuch',
            'isRequired' => true,
            'type' => TType::SET,
            'etype' => TType::I64,
            'elem' => array(
                'type' => TType::I64,
                ),
        ),
    );

    /**
     * @var int[]
     */
    public $aborted = null;
    /**
     * @var int[]
     */
    public $nosuch = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['aborted'])) {
                $this->aborted = $vals['aborted'];
            }
            if (isset($vals['nosuch'])) {
                $this->nosuch = $vals['nosuch'];
            }
        }
    }

    public function getName()
    {
        return 'HeartbeatTxnRangeResponse';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::SET) {
                        $this->aborted = array();
                        $_size739 = 0;
                        $_etype742 = 0;
                        $xfer += $input->readSetBegin($_etype742, $_size739);
                        for ($_i743 = 0; $_i743 < $_size739; ++$_i743) {
                            $elem744 = null;
                            $xfer += $input->readI64($elem744);
                            $this->aborted[$elem744] = true;
                        }
                        $xfer += $input->readSetEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::SET) {
                        $this->nosuch = array();
                        $_size745 = 0;
                        $_etype748 = 0;
                        $xfer += $input->readSetBegin($_etype748, $_size745);
                        for ($_i749 = 0; $_i749 < $_size745; ++$_i749) {
                            $elem750 = null;
                            $xfer += $input->readI64($elem750);
                            $this->nosuch[$elem750] = true;
                        }
                        $xfer += $input->readSetEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('HeartbeatTxnRangeResponse');
        if ($this->aborted !== null) {
            if (!is_array($this->aborted)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('aborted', TType::SET, 1);
            $output->writeSetBegin(TType::I64, count($this->aborted));
            foreach ($this->aborted as $iter751 => $iter752) {
                $xfer += $output->writeI64($iter751);
            }
            $output->writeSetEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->nosuch !== null) {
            if (!is_array($this->nosuch)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('nosuch', TType::SET, 2);
            $output->writeSetBegin(TType::I64, count($this->nosuch));
            foreach ($this->nosuch as $iter753 => $iter754) {
                $xfer += $output->writeI64($iter753);
            }
            $output->writeSetEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
